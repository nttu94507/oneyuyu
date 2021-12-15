import React, {useState,useContext,createContext} from 'react';


interface omclick {
  onClick: React.MouseEventHandler<HTMLButtonElement>;
}


const Score = () => {
  const num = [1,2,3,4,5,6]
  return num.map((e)=>
          <input  key={e} name={"shot"+e} />
      )
}


const Archery = () => {
  const [total,setTotal] = useState(0) ;
  const [shot,setShot] = useState(1);
  const [shot1,setShot1] = useState("");
  const [shot2,setShot2] = useState("");
  const [shot3,setShot3] = useState("");
  const [shot4,setShot4] = useState("");
  const [shot5,setShot5] = useState("");
  const [shot6,setShot6] = useState("");

 
  
  const clickBtn =(event: React.MouseEvent<HTMLButtonElement>)=>{
    event.preventDefault();
    const answer: HTMLButtonElement = event.currentTarget;
    const val:string = answer.value;

    const countShot=()=>{
      if(shot==1){
        setShot1(val);
      }else if (shot==2){
        setShot2(val);
      }else if (shot==3){
        setShot3(val);
      }else if (shot==4){
        setShot4(val);
      }else if (shot==5){
        setShot5(val);
      }else if (shot==6){
        setShot6(val);
      }
    }

    if (shot<=6){
      setShot(shot+1);
      if (val=="X"||val=="10"){
        setTotal(total+10);
        countShot();
      }else if(val=="9"){
        setTotal(total+9);
        countShot();
      }else if(val=="8"){
        setTotal(total+8);
        countShot();
      }else if(val=="7"){
        setTotal(total+7);
        countShot();
      }else if(val=="6"){
        setTotal(total+6);
        countShot();
      }else if(val=="5"){
        setTotal(total+5);
        countShot();
      }else if(val=="M"){
        countShot();
      }
      
    }else{
      alert("已經滿6箭")
    }
  }

  function clear (){
    setTotal(0);
    setShot(1);
    setShot1("");
    setShot2("");
    setShot3("");
    setShot4("");
    setShot5("");
    setShot6("");

  }

 

    return(
      <div>
          <form>
          <div className="score">
            <input  key="1" name="shot1" defaultValue={shot1}/>
            <input  key="2" name="shot2" value={shot2}/>
            <input  key="3" name="shot3" value={shot3}/>
            <input  key="4" name="shot4" value={shot4}/>
            <input  key="5" name="shot5" value={shot5}/>
            <input  key="6" name="shot6" value={shot6}/>
            <input value={total}/>
          </div>
          </form>
          <div className="scorebutton">
            <button value="X"   id="M"  name="scoreX"  onClick={clickBtn}>X</button>
            <button value="10"  id="10" name="score10"  onClick={clickBtn}>10</button>
            <button value="9"   id="9"  name="score9"  onClick={clickBtn}>9</button>
            <button value="8"   id="8"  name="score8"  onClick={clickBtn}>8</button>
            <button value="7"  id="7"  name="score7"  onClick={clickBtn}>7</button>
            <button value="6"  id="6"  name="score6"  onClick={clickBtn}>6</button>
            <button value="5"  id="5"  name="score5"  onClick={clickBtn}>5</button>
            <button value="M"  id="M"  name="scoreM"  onClick={clickBtn}>M</button>
            <button value="0"  key="clear" name="clear"  onClick={clear}>clear</button>
          </div>
      </div>
    )
}

export default Archery;