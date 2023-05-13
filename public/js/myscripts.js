const updateList = document.getElementById('update-list');
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');
let currentIndex = 0;

// Hide all updates except the current one
function showUpdate() {
    const updates = updateList.children;
    for (let i = 0; i < updates.length; i++) {
        if (i === currentIndex) {
            updates[i].style.display = 'block';
        } else {
            updates[i].style.display = 'none';
        }
    }
}

// Move to the previous update
function showPrevUpdate() {
    if (currentIndex > 0) {
        currentIndex--;
        showUpdate();
    }
}

// Move to the next update
function showNextUpdate() {
    if (currentIndex < updateList.children.length - 1) {
        currentIndex++;
        showUpdate();
    }
}

// Add event listeners to the navigation buttons
prevBtn.addEventListener('click', showPrevUpdate);
nextBtn.addEventListener('click', showNextUpdate);

// Show the first update on page load
showUpdate();
