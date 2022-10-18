function clicked(option) {

    if (option == 'grid') {
        document.getElementById('grid').style.display = 'block'
        document.getElementById('list').style.display = 'none'


        /* document.getElementById('btn-grid').classList.remove("btn-outline-primary")
        document.getElementById('btn-grid').classList.add("btn-primary")

        document.getElementById('btn-list').classList.remove("btn-primary")
        document.getElementById('btn-list').classList.add("btn-outline-primary") */

    } else {
        document.getElementById('grid').style.display = 'none'
        document.getElementById('list').style.display = 'block'

        /* document.getElementById('btn-grid').classList.remove("btn-primary")
        document.getElementById('btn-grid').classList.add("btn-outline-primary")

        document.getElementById('btn-list').classList.remove("btn-outline-primary")
        document.getElementById('btn-list').classList.add("btn-primary") */
    }

    document.getElementById('btn-grid').classList.toggle("active")
    document.getElementById('btn-list').classList.toggle("active")
}
