import React, {useState} from 'react';




const Button = (props) => {
    // const val = ["X",10,9,8,7,6,5,"M"]
    const [score,setScore] = useState(0);
    const val = props.name; 
    

    return (
            <button name={val}
              >{val}</button>
        )
    
      
}

export default Button;
