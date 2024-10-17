var namen =['yassine1','yassine2','yassine3'];
let container = document.getElementById('namencontainer')

for(let i = 0; i < namen.length; i++)
    {
        console.log(namen[i]);
        var button = document.createElement('button');
        button.innerText = namen[i];
        button.addEventListener("click", button_clicked)

        container.appendChild(button);

        
    }

function button_clicked(e){
    console.log(e.target.innerText);
    alert(e.target.innerText  + " button clicked");
    e.target.remove();
}