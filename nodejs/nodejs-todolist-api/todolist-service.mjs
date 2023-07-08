export class TodolistService {
    todolist = ["Mohammad", "Eka", "Satrya", "Putra"];

    getTodolistJSON() {
        return JSON.stringify({
            code: 200,
            status: "OK",
            data: this.todolist.map((value, index) => {
                return {
                    id: index,
                    todo: value
                }
            })
        })
    }

    getTodolist(request, response) {
        response.write(this.getTodolistJSON());
        response.end()
    }

    createTodo(request, response) {
        request.addListener("data", (data) => {
            const body = JSON.parse(data.toString());
            this.todolist.push(body.todo);

            response.write(this.getTodolistJSON());
            response.end()
        })
    }

    updateTodo(request, response) {
        request.addListener("data", (data) => {
            const body = JSON.parse(data.toString());
            if (this.todolist[body.id]) {
                this.todolist[body.id] = body.todo;
            }

            response.write(this.getTodolistJSON());
            response.end()
        })
    }

    deleteTodo(request, response) {
        request.addListener("data", (data) => {
            const body = JSON.parse(data.toString());
            if (this.todolist[body.id]) {
                this.todolist.splice(body.id, 1);
            }

            response.write(this.getTodolistJSON());
            response.end();
        })
    }
}