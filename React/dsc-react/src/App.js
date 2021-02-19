import Apples from "./Apples";
function App() {
  const name = "Jane Doe";
  const day = "Thursday";
  return (
  <div>
      <h1>Shopping list for {name} to be nunuad on {day}</h1>
      <ul>
        <li>Instagram</li>
        <li>Whatsapp</li>
        <li>Oculus</li>
      </ul>
      <Apples/>
    </div>
    
    )
    
}
export default App; //allows reusing the function
