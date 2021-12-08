import React, {useState,useContext,createContext} from 'react';



const Score = () => {
  const num = [1,2,3,4,5,6]
  return num.map((e)=>
          <input  key={e} name={"shot"+e} />
      )
}


const Archery = () => {
  const [total,setTotal] = useState(0) ;
  const [shot1,setShot1] = useState();
  
  function clickBtn (e){
    const name = parseInt(e,10);
    // console.log(name);
    const add =  total+name; 
    setTotal(add);
    console.log(total);
    
  }

  function clear (){
    setTotal(0);
  }

 

    return(
      <div>
          <form>
          <div className="score">
            <input  key="1" name="shot1" />
            <input  key="2" name="shot2" />
            <input  key="3" name="shot3" />
            <input  key="4" name="shot4" />
            <input  key="5" name="shot5" />
            <input  key="6" name="shot6" />
            <input value={total} />
          </div>
          </form>
          <div className="scorebutton">
            <button value="10" key="X" name="scoreX"  onClick={(event)=>clickBtn(event.target.value)}>X</button>
            <button value="10" key="10" name="score10" onClick={(event)=>clickBtn(event.target.value)}>10</button>
            <button value="9"  key="9" name="score9"  onClick={(event)=>clickBtn(event.target.value)}>9</button>
            <button value="8"  key="8" name="score8"  onClick={(event)=>clickBtn(event.target.value)}>8</button>
            <button value="7"  key="7" name="score7"  onClick={(event)=>clickBtn(event.target.value)}>7</button>
            <button value="6"  key="6" name="score6"  onClick={(event)=>clickBtn(event.target.value)}>6</button>
            <button value="5"  key="5" name="score5"  onClick={(event)=>clickBtn(event.target.value)}>5</button>
            <button value="0"  key="M" name="scoreM"  onClick={(event)=>clickBtn(event.target.value)}>M</button>
            {/* <button value="0"  key="clear" name="clear"  onClick={clear}>clear</button> */}
            

          </div>
      </div>
    )
}

export default Archery;