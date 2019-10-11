const list = document.getElementsByClassName('todoItem');
console.log(list);
const save = document.getElementById('save');
save.addEventListener('click', () => {
    fetch('./todo.json')
    .then(res => {
        return res.json();
    })
    .then(data => {
    })
    .catch(err => {
        console.error(err);
    })
}) 
