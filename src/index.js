const { render } = wp.element; 
import App from './App';
import './style.css';
if (document.getElementById('my-react-app')) { 
  render(<App />, document.getElementById('my-react-app'));
}