const buttonFirst = document.getElementById('buttonPrev')
let buttonLast = document.getElementById('buttonNext')
const rooms = document.getElementsByClassName('rooms-content__room')
const paginationElement = document.querySelector('.pagination-rooms')
const roomsArray = [...rooms]
let roomsToDisplay = []
let buttonsToDisplay = []
let activeRooms = 0;
let firstRoomIndex = 0;
let lastRoomIndex;
let buttonNumbers = 0;
let activePage

document.addEventListener('DOMContentLoaded', () => {

    ['resize','load'].forEach((event) => {

        let newActiveRooms;

        window.addEventListener(event, () => {

            if(window.innerWidth < 1450){
                newActiveRooms = 6
            }
            else {
                newActiveRooms = 12
            }

            // Comprobar que se actualiza el numero de habitaciones a visualizar
            if(newActiveRooms != activeRooms){

                activeRooms = newActiveRooms

                lastRoomIndex = activeRooms

                roomsToDisplay.forEach((room) => {
                    room.classList.remove('rooms-content__room--active')
                })

                roomsToDisplay = roomsArray.slice(firstRoomIndex,lastRoomIndex)

                roomsToDisplay.forEach((room) => {
                    room.classList.add('rooms-content__room--active')
                })

                buttonNumbers = Math.ceil(roomsArray.length / activeRooms)

                // Los elementos de la paginación en formato array
                buttonsToDisplay = Array.from(paginationElement.children)

                // Eliminar los elementos del array que no sean el número, solo quiero los numeros de paginación
                buttonsToDisplay.forEach((button) => {

                    if(button.innerHTML !== '&lt;&lt;' && button.innerHTML !== '&gt;&gt;'){
                        paginationElement.removeChild(button)
                    }
                })

                // Iteramos la cantidad de botones que tiene que tener la paginación
                for (let index = 1; index <= buttonNumbers; index++) {
                    
                    const button = document.createElement('button')
                    button.classList.add('pagination-rooms__button')
                    button.classList.add('button')
                    button.classList.add('button--pagination')
                    button.innerHTML = index

                    if(index == 1){
                        button.classList.add('button--pagination--active')
                        activePage = button
                    }
                    
                    paginationElement.insertBefore(button,buttonLast)
                }
            }

            
        })
    })
})

const nextPageRoom = () => {

    
    activePage.nextElementSibling.classList.add('button--pagination--active')
    activePage.classList.remove('button--pagination--active')
    activePage = activePage.nextElementSibling
    buttonFirst.classList.remove('button--pagination--inactive')
    buttonFirst.disabled = false

    if(activePage.nextElementSibling.innerHTML === '&gt;&gt;'){
        buttonLast.classList.add('button--pagination--inactive')
        buttonLast.disabled = true
    }

    roomsToDisplay.forEach((room) => {
        room.classList.remove('rooms-content__room--active')
    })

    firstRoomIndex = lastRoomIndex
    lastRoomIndex += activeRooms

    roomsToDisplay = roomsArray.slice(firstRoomIndex,lastRoomIndex)

    roomsToDisplay.forEach((room) => {
        room.classList.add('rooms-content__room--active')
    })

}

const prevPageRoom = () => {

    activePage.previousElementSibling.classList.add('button--pagination--active')
    activePage.classList.remove('button--pagination--active')
    activePage = activePage.previousElementSibling
    buttonLast.classList.remove('button--pagination--inactive')
    buttonLast.disabled = false

    if(activePage.previousElementSibling.innerHTML === '&lt;&lt;'){
        buttonFirst.classList.add('button--pagination--inactive')
        buttonFirst.disabled = true
    }

    roomsToDisplay.forEach((room) => {
        room.classList.remove('rooms-content__room--active')
    })

    lastRoomIndex = firstRoomIndex
    firstRoomIndex -= activeRooms

    roomsToDisplay = roomsArray.slice(firstRoomIndex,lastRoomIndex)

    roomsToDisplay.forEach((room) => {
        room.classList.add('rooms-content__room--active')
    })


}


buttonFirst.addEventListener('click', prevPageRoom)
buttonLast.addEventListener('click',nextPageRoom)