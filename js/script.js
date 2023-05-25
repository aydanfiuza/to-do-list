// Seleção de elementos
const todoForm = document.querySelector("#todo-form");
const todoInput = document.querySelector("#todo-input");
const todoList = document.querySelector("#todo-list");
const editForm = document.querySelector("#edit-form");
const editInput = document.querySelector("#edit-input");
const cancelEditBtn = document.querySelector("#cancel-edit-btn");

let oldInputValue

// Funções
const toggleForms = () => {
    editForm.classList.toggle("hide")
    todoForm.classList.toggle("hide")
    todoList.classList.toggle("hide")
}

const updateTodo = (text) => {
    const todos = document.querySelectorAll(".todo")
    todos.forEach((todo) => {
        let todoTitle = todo.querySelector("h3")
        if (todoTitle.innerText === oldInputValue) {
            todoTitle.innerText = text
        }
    })
}

// Eventos
todoForm.addEventListener("submit", () => {
    const inputValue = todoInput.value

    if (inputValue) {
        saveTodo(inputValue)
    }
})

document.addEventListener("click", (e) => {
    const targetEl = e.target

    if(targetEl.classList.contains("edit-todo")) {
        toggleForms()
    }
})


cancelEditBtn.addEventListener("click", (e) => {
    e.preventDefault()

    toggleForms()
})