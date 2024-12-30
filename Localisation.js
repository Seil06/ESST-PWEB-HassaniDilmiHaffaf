document.addEventListener('DOMContentLoaded', () => {
    const tableBody = document.querySelector('.locationTableBody');

    const fetchLocations = () => {
        fetch('../php/localisation.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({ action: 'fetch' }),
        })
        .then((response) => response.json())
        .then((data) => {
            if (!Array.isArray(data)) {
                console.error('Erreur serveur :', data);
                alert('Erreur serveur : ' + (data.message || 'Réponse inattendue'));
                return;
            }
            const tableBody = document.querySelector('.locationTableBody');
            tableBody.innerHTML = '';
            data.forEach((localisation) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${localisation.NomLocalisation}</td>
                    <td>
                        <button class="btn-edit" onclick="editLocation(${localisation.IDLocalisation}, '${localisation.NomLocalisation}')">Modifier</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        })
        .catch((error) => console.error('Erreur de fetch :', error));
    };

    const addLocationForm = document.getElementById('addLocationForm');
    addLocationForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(addLocationForm);
        formData.append('action', 'add');

        fetch('../php/localisation.php', {
            method: 'POST',
            body: formData,
        })
        .then((response) => response.json())
        .then((data) => {
            alert(data.message);
            fetchLocations();
        });
    });

    window.editLocation = (id, name) => {
        const newName = prompt('Modifier le nom de la localisation', name);
        if (newName) {
            fetch('../php/localisation.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({ action: 'update', IDLocalisation: id, NomLocalisation: newName }),
            })
            .then((response) => response.json())
            .then((data) => {
                alert(data.message);
                fetchLocations();
            });
        }
    };

    searchInput.addEventListener("input", function () {
        const query = searchInput.value;
    
        fetch("../php/searchLocalisations.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: `query=${encodeURIComponent(query)}`,
        })
            .then((response) => response.json())
            .then((data) => {
                tableBody.innerHTML = ""; // Vide la table avant d'ajouter les résultats
    
                if (data.length > 0) {
                    data.forEach((author) => {
                        const row = document.createElement("tr");
                        row.innerHTML = `
                            <td>${author.NomLocalisation}</td>
                    <td>
                        <button class="btn-edit" onclick="editAuteur(${author.IDLocalisation}, '${author.NomLocalisation}')">Modifier</button>
                    </td>
                        `;
                        tableBody.appendChild(row);
                    });
                } else {
                    tableBody.innerHTML = "<tr><td colspan='2'>Aucun auteur trouvé.</td></tr>";
                }
            })
            .catch((error) => console.error("Erreur :", error));
    });

    fetchLocations();
});