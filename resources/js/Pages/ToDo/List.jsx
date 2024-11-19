import React from "react";
import { Link } from '@inertiajs/inertia-react';
import ToDo from "@/Pages/ToDo/ToDo.jsx";
import NavLink from "@/Components/NavLink.jsx";

const List = ({ todos, userId}) => {
    const listStyle = {
        listStyleType: 'none',
        padding: 0,
        border: '1px solid #ddd',
        borderRadius: '8px',
    };

    const containerStyle = {
        maxWidth: '600px',
        margin: '0 auto',
        padding: '20px',
        border: '1px solid #ddd',
        borderRadius: '8px',
        backgroundColor: '#f9f9f9',
    };

    console.log(userId)

    return (
        <div>
            <h1>Minhas Tarefas</h1>
            <div>
                <ul style={listStyle}>
                    <li>
                        {todos.map(todo => (
                            <ToDo key={todo.id} todo={todo} userId={userId} toDoId={todo.id}/>
                        ))}
                    </li>
                </ul>
            </div>
            <div style={{marginTop: '20px'}}>
                <NavLink>
                    <Link href={`/user/${userId}/createTodo`}>
                        Criar uma tarefa
                    </Link>
                </NavLink>
            </div>
        </div>
    );
};

export default List
