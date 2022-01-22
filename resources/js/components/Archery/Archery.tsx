import React, {useState} from 'react';
import axios from 'axios';
import Master from '../Master';




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
      alert("已經射滿6箭了哦~")
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
    setShot6("")
  }

  const post=()=>{
    axios.post('api/game', {
      shot1: shot1,
      shot2: shot2,
      shot3: shot3,
      shot4: shot4,
      shot5: shot5,
      shot6: shot6,
      total: total
    })
    .then(function (response) {

      if (response.data==1){
        clear();
      }
    })
    .catch(function (error) {
      console.log(error.response.data);
    });
  } 
  

 

    return(
      <div>
          <form>
          <div className="score">
            <div>{shot1}</div>
            <div>{shot2}</div>
            <div>{shot3}</div>
            <div>{shot4}</div>
            <div>{shot5}</div>
            <div>{shot6}</div>
            <div>{total}</div>

            <input value={total}/>
          </div>
          </form>
          <div className="scorebutton">
            <button value="X"   id="M"  name="scoreX"  onClick={clickBtn} className='scoreBtn'>X</button>
            <button value="10"  id="10" name="score10"  onClick={clickBtn} className='scoreBtn'>10</button>
            <button value="9"   id="9"  name="score9"  onClick={clickBtn} className='scoreBtn'>9</button>
            <button value="8"   id="8"  name="score8"  onClick={clickBtn} className='scoreBtn'>8</button>
            <button value="7"  id="7"  name="score7"  onClick={clickBtn} className='scoreBtn'>7</button>
            <button value="6"  id="6"  name="score6"  onClick={clickBtn} className='scoreBtn'>6</button>
            <button value="5"  id="5"  name="score5"  onClick={clickBtn} className='scoreBtn'>5</button>
            <button value="M"  id="M"  name="scoreM"  onClick={clickBtn}className='scoreBtn'>M</button>
            <button value="0"  key="clear" name="clear"  onClick={clear} className='scoreBtn'>clear</button>
            <button key="post" name="post"  onClick={post} className='scoreBtn'>post</button>
          </div>
      </div>
     
    )
}

export default Archery;