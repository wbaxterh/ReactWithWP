import React, { useState} from "react";
const App = () => {
    const [data, setData] = useState({
        email: object.email,
    })
    return (
      <div class="container">
        <h2>Hello World From React App {data.email}</h2>
      </div>
    );
  };
  export default App;