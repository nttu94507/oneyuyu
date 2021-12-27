
import React, {useState} from 'react';
import ReactDOM  from 'react-dom';
import axios from 'axios';



const Master = () => {
    const [state, setData] = useState();
    const arr:any = [];
    // let ma = new Map();
  const result = axios.post('/show')
  .then(function (response) {
    arr.push(response.data);
    console.log(arr);
    })
  .catch(function (error) {
    // console.log(error.response.data);
  });
  
  const test = arr.map((i:any)=> <li>{i.id}</li>);
  // console.log(test);

  

    return(
      <div >
        <ul>
        {test}
        </ul>
        this is master
      </div>
    )
}

export default Master;



