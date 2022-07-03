let count = 0

let countEl = document.querySelectorAll(".quantity")

function increment() {
    count += 1
    countEl.textContent = count
}
