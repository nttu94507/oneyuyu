import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Routes,
    Route,
    Link
  } from "react-router-dom";

import Master from '../Master';
import Archery from '../Archery';


function App() {
    return (
        <div className="BG">
              <h1>Welcome to React Router!</h1>
              <Link to="/">master</Link>
                <Link to="/archery">Archery</Link>                     
                <Routes>
                    <Route path="/" element={<Master />} />
                    <Route path="/archery" element={<Archery />} />
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


