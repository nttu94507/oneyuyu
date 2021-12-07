import React, {useState} from 'react';

import Button from './Button';
import Score from './score';

const countTotal =(e)=>{
    setTotal(total+e);
}



const Archery = () => {
  const [total,setTotal] = useState(0) 
  const countTotal =(e)=>{
    setTotal(total+e);
  }
    return(
      <div>
          <form>
          <div className="score">
           <Score />
           <input value={total} />
          </div>
          </form>
          <div className="scorebutton">
            <Button name="X" />

          </div>
      </div>
    )
}

export default Archery;