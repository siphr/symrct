import React from 'react';

export const TodoContext = React.createContext();

class TodoContextProvider extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            todos: ['hello', 'world'],
        };
    }

    render() {
        return (
            <TodoContext.Provider value={{
                ...this.state,
            }}>
                {this.props.children}
            </TodoContext.Provider>
        );
    }
}

export default TodoContextProvider;
