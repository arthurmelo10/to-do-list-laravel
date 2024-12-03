import React from "react";
import { Link } from '@inertiajs/inertia-react';
import ToDo from "@/Pages/ToDo/ToDo.jsx";
import NavLink from "@/Components/NavLink.jsx";
import DangerButton from "@/Components/DangerButton.jsx";

const List = ({ todos, user}) => {
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

    return (
        <div>
            <h1>Bem Vindo, {user.name}</h1>
            <h1>Minhas Tarefas</h1>
            <DangerButton>
                <Link href={`/logout`} method={'post'}>
                    LogOut
                </Link>
            </DangerButton>
            <div>
                <ul style={listStyle}>
                    <li>
                        {todos.map(todo => (
                            <ToDo key={todo.id} todo={todo} userId={user.id} toDoId={todo.id}/>
                        ))}
                    </li>
                </ul>
            </div>
            <div style={{marginTop: '20px'}}>
                <NavLink>
                    <Link href={`/user/${user.id}/createTodo`}>
                        Criar uma tarefa
                    </Link>
                </NavLink>
            </div>
        </div>
    );
};

export default List
