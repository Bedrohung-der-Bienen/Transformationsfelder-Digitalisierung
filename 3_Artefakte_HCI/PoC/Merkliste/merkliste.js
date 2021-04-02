// Array for testing purposes. this will be living in the database.
const plants = [{name:'Thymian', img:'img/thyme.jpeg', watering: 'täglich'}, {name:'Basilikum', img:'img/basil.webp', watering: 'täglich'}, {name:'Lavendel', img:'img/lavander.jpeg', watering: 'täglich'}];
var bookmarked = [];

document.addEventListener("DOMContentLoaded", function() {
    getPlantsForCatalog();
    
    const input = document.getElementsByTagName("input")
    
    for (var i=0; i<input.length; i++){
        $(document).on('click','input',function(e){
            console.log(e)
            if (bookmarked.some(plant => plant.name === e.target.id)){
                removePlantToBookmarked(e);
            } else if (bookmarked.some(plant => plant.name === e.target.name)) {
                console.log('remove from bookmarks')
            } else {
                addPlantToBookmarked(e);
            }

            console.log(bookmarked)
        })

        // input[i].addEventListener("click", function(e) {
        //     if (bookmarked.some(plant => plant.name === e.target.id)){
        //         removePlantToBookmarked(e);
        //     } else if (bookmarked.some(plant => plant.name === e.target.id)) {
        //         console.log('test')
        //     } else {
        //         addPlantToBookmarked(e);
        //     }

        //     console.log(bookmarked)
        // });
        
    }

    
    // .addEventListener("click", function(e) {
    //     console.log(e.target)
    //     /*plants.push({
    //         user: 'Erbse',
    //         datetime: datetime,
    //         content: document.getElementById("input").value
    //     })

    //     var paras = document.getElementsByClassName('commentary');
    //     while(paras[0]) {
    //         paras[0].parentNode.removeChild(paras[0]);
    //     }

    //     getComment();
    //     document.getElementById("input").value = ''*/
    // });
})

const addPlantToBookmarked = function(e) {
    console.log(e.target)
    plants.forEach((plant) => {                
        if (e.target.id === plant.name) {
            bookmarked.push(plant)
        }
    })
    e.target.src = "img/bookmark.png";
    getBookmarkedPlants();
}

const removePlantToBookmarked = function(e) {
    console.log('remove',e.target.id)
    var filtered = bookmarked.filter(function(plant) { return plant.name != e.target.id; }); 
    bookmarked = filtered;
    e.target.src = "img/bookmark-white.png";
    getBookmarkedPlants();
}


const getPlantsForCatalog = function() {
    plants.forEach((plant) => {
        const plantBox = (
            `<div class="Plant">
                <img src="` + plant.img +`" width="50" height="50">
                <p class="PlantName">` + plant.name +`</p>
                <div class="PlantInfo">
                    <p><span>Wässern:</span> <span>` + plant.watering +`</span></p>
                </div>
                <input type="image" id=` + plant.name +` class="bookmarkIcon" src="img/bookmark-white.png" width="25" height="25"/>
            </div>`
        )

        let div = document.createElement('div');
        div.innerHTML = plantBox;
        div.setAttribute('class', 'plantBox');
        document.getElementById('Plants').appendChild(div);
    });
}

const getBookmarkedPlants = function() {
    
    var paras = document.getElementsByClassName('plantBox2');
    while(paras[0]) {
        paras[0].parentNode.removeChild(paras[0]);
    }

    bookmarked.forEach((plant) => {
        const plantBox = (
            `<div class="Plant">
                <img src="` + plant.img +`" width="50" height="50">
                <p class="PlantName">` + plant.name +`</p>
                <div class="PlantInfo">
                    <p><span>Wässern:</span> <span>` + plant.watering +`</span></p>
                </div>
                <input type="image" name=` + plant.name +` class="bookmarkIcon" src="img/bookmark.png" width="25" height="25"/>
            </div>`
        )

        let div = document.createElement('div');
        div.innerHTML = plantBox;
        div.setAttribute('class', 'plantBox2');
        document.getElementById('BookmarkedPlants').appendChild(div);
    });
}