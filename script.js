// Characters to be escaped [.*+?^${}()|[\]\\] 

function search(){
    let textToSearch = document.getElementById("text-to-search").value;
    let paragraph = document.querySelectorAll(".paragraph");
    textToSearch = textToSearch.replace(/[.*+?^${}()|[\]\\]/g,"\\$&");

    //const p = document.createElement("p")

    let pattern = new RegExp(`${textToSearch}`,"gi");
    paragraph.forEach(e => {
        e.innerHTML = e.textContent.replace(pattern, match => `<mark>${match}</mark>`)
    });
    // paragraph.innerHTML = paragraph.textContent.replace(pattern, match => `<mark>${match}</mark>`)

    //paragraph.appendChild(p)
}