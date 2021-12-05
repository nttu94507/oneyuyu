import { react } from 'laravel-mix';
import React, {Component} from 'react';
import { Router, Route, Link } from 'react-router';
import ReactDOM ,{ render } from 'react-dom';


// class Master extends Component {
//   render(){
//     return (
//       <div className="container">
//         <nav className="navbar navbar-default">
//           <div className="container-fluid">
//             <div className="navbar-header">
//               <a className="navbar-brand" href="https://www.bear777.com">bear777.com</a>
//             </div>
//             <ul className="nav navbar-nav">
//               <li><Link to="/">Home</Link></li>
//               {/* <li><Link to="add-item">Create Post</Link></li>
//               <li><Link to="display-item">Post List</Link></li> */}
//             </ul>
//           </div>
//       </nav>
//           <div>
//               {this.props.children}
//           </div>
//       </div>
//     )
//   }
// }

function Master (){
        return (
          // <div className="container">
          //   <nav className="navbar navbar-default">
          //     <div className="container-fluid">
          //       <div className="navbar-header">
          //         <a className="navbar-brand" href="https://www.bear777.com">bear777.com</a>
          //       </div>
          //       <ul className="nav navbar-nav">
          //         <li><Link to="/">Home</Link></li>
          //         {/* <li><Link to="add-item">Create Post</Link></li>
          //         <li><Link to="display-item">Post List</Link></li> */}
          //       </ul>
          //     </div>
          // </nav>
          //     <div>
          //         {this.props.children}
          //     </div>
          // </div>
          <h1>123</h1>
        )
}
export default Master;
// ReactDOM.render(<Master/>, document.getElementById('crud-app'));