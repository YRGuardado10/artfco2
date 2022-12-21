const distance = document.querySelector("#distance")
const distanceShow = document.querySelector("#distanceShow")

distance.onimput = () => {
    distanceShow.innerHTML = distance.value
}
