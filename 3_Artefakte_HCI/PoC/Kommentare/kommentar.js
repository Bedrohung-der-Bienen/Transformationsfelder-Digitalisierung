let firstDate = new Date('January 19, 2021 13:15:30');
let firstCommentsDate = firstDate.getDate() + "/"
                + (firstDate.getMonth()+1)  + "/" 
                + firstDate.getFullYear() + " "  
                + firstDate.getHours() + ":"  
                + firstDate.getMinutes() + ":" 
                + firstDate.getSeconds();

// Array for testing purposes. this will be living in the database.
const comments = [{user:'Peach', content:'Thymian ist ein Bienen magnet. Pflanzt Thymian! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', datetime: firstCommentsDate}];

document.addEventListener("DOMContentLoaded", function() {
    getComment();
    
    document.getElementById("send").addEventListener("click", function() {
        if (document.getElementById("input").value != '') {
            const currentdate = new Date();

            let datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
    
            comments.push({
                user: 'Erbse',
                datetime: datetime,
                content: document.getElementById("input").value
            })
    
            var paras = document.getElementsByClassName('commentary');
            while(paras[0]) {
                paras[0].parentNode.removeChild(paras[0]);
            }
    
            getComment();
            document.getElementById("input").value = ''
        }
    }); 
})


const getComment = function() {
    comments.slice().reverse().forEach((comment) => {
        const commentary = (
        `<div class="CommentsHeader" id="CommentsHeader">
            <div class="CommentsHeaderRight">
                <div id="datetime">` + comment.datetime  +`</div>
                <span> von </span>
                <div id="user">` + comment.user  +`</div>
            </div>
        </div>
        <hr />
        <div  id="CommentsContent">
            <div id="content">` + comment.content  +`</div>
        </div>`
        )

        let div = document.createElement('div');
        div.innerHTML = commentary;
        div.setAttribute('class', 'commentary');
        document.getElementById('Comment').appendChild(div);
    });
}