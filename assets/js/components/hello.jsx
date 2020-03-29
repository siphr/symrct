import React from 'react';
import {TodoContext} from '../contexts/todo_context';

function Hello() {
    const context = React.useContext(TodoContext);

    return (
        <div className="hello">
        {context.todos}
        </div>
    );
}

export default Hello;
