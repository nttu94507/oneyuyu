import React from 'react';
import ReactDOM from 'react-dom';

function App() {
    return (
        <div className="container">
            this is sample
            
        </div>
    );
}

export default App;

if (document.getElementById('crud-app')) {
    ReactDOM.render(<App />, document.getElementById('crud-app'));
}
