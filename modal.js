// modal.js

document.addEventListener('DOMContentLoaded', () => {
    const interestBoxes = document.querySelectorAll('.interest-box');
    const modal = document.getElementById('interest-modal');
    const closeModalBtn = document.querySelector('.close');

    interestBoxes.forEach(box => {
        box.addEventListener('click', () => {
            box.classList.toggle('selected');
            const span = box.querySelector('span');
            if (box.classList.contains('selected')) {
                span.textContent = 'check';
            } else {
                span.textContent = 'add';
            }
        });
    });

    // Handle opening and closing modal when clicking on "Road Maps" link
    const roadMapsLink = document.querySelector('a[href="roadmaps.html"]');
    roadMapsLink.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent default link behavior
        modal.style.display = 'block';
    });

    closeModalBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
});
