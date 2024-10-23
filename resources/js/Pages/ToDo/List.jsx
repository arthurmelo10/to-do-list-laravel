import React from "react";
import { Link } from '@inertiajs/inertia-react';

const List = ({ todos, userId }) => {
    return (
        <div>
            <h1>Minhas Tarefas</h1>
            <div>
                <ul>
                    {todos.map(todo => (
                        <div>
                            <li key={todo.id}>
                                <h2>{todo.title}</h2>
                                <p>{todo.description}</p>
                                <p>{todo.completed ? 'Completed' : 'Pending'}</p>
                            </li>
                        </div>
                    ))}
                </ul>
            </div>
            <div style={{marginTop: '20px'}}>
                <Link href={`/user/${userId}/createTodo`}>
                    Criar uma tarefa
                </Link>
            </div>
        </div>
    );
};

export default List
