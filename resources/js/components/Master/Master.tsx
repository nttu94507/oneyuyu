
import React, {useState,useEffect ,createContext, useContext} from 'react';
import ReactDOM, { render }  from 'react-dom';
import axios from 'axios';

interface Socre {
  id: string,
  shot1:string,
  shot2:string,
  shot3:string,
  shot4:string,
  shot5:string,
  shot6:string,
  total:string,
}

const Master = () => {
  const [test,setTest] = useState({score:[]});


  useEffect(() => {
    async function fetchData() {
      const res = await axios.get('api/show');
      setTest({score:res.data});
    }
    fetchData();
  },[]);
  // const fetchedData = test;
  
    //   axios.get('api/show')
    //   .then(function (response) {
    //   setTest({score:response.data})
    //   })
    //   .catch(function (error) {
    //   // console.log(error.response.data);
    // });
    // console.log(test)
      
   
  
  // const test1 = test.data.map((i:any)=> <li>{i}</li>);
  // console.log(test);
    return(
      test.score.map((scor:Socre,i)=> {
          return(
            <ul>
            <li >{scor.shot1}</li>
            <li >{scor.shot2}</li>
            <li >{scor.shot3}</li>
            <li >{scor.shot4}</li>
            <li >{scor.shot5}</li>
            <li >{scor.shot6}</li>
            <li >{scor.total}</li>
            </ul>
          )
      })

    )

   
}

export default Master;



