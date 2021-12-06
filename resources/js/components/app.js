import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Routes,
    Route,
    Link
  } from "react-router-dom";

import Master from './Master';


function App() {
    return (
        <div className="container">
              <h1>Welcome to React Router!</h1>
                <Routes>
                    <Route path="/" element={<Master />} />
                </Routes>
        </div>
    );
}

export default App;

if (document.getElementById('crud-app')) {
    ReactDOM.render( <Router>
        <App />
      </Router>, document.getElementById('crud-app'));
}
