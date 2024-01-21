/* js/designers-script.js */

document.addEventListener('DOMContentLoaded', function () {
    const appointmentButtons = document.querySelectorAll('.appointment-button');

    appointmentButtons.forEach(button => {
        button.addEventListener('click', function () {
            const designerName = this.getAttribute('data-designer');
            alert(`Booking appointment with ${designerName}.`); // Replace with actual booking logic
        });
    });
});
// js/designers-search.js

function searchDesigners() {
    const input = document.getElementById('searchInput').value.toLowerCase();
    const designers = document.querySelectorAll('.designer-profile');

    designers.forEach(designer => {
        const designerName = designer.querySelector('h3').textContent.toLowerCase();
        designer.style.display = designerName.includes(input) ? 'block' : 'none';
    });
}

function filterDesigners() {
    const categorySelect = document.getElementById('categorySelect');
    const selectedCategory = categorySelect.value;
    const allCategories = document.querySelectorAll('.designer-category');

    allCategories.forEach(category => {
        const categoryId = category.id.toLowerCase();
        if (selectedCategory === 'all' || categoryId.includes(selectedCategory)) {
            category.style.display = 'block';
        } else {
            category.style.display = 'none';
        }
    });
}

