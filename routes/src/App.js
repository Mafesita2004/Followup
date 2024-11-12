import React from 'react';
import ReactDOM from 'react-dom';
import ProgramsComponent from './components/ProgramsComponent';

function App() {
  return (
    <div>
      <ProgramsComponent />
    </div>
  );
}

export default App;
mix.react('routes/src/app.js', 'public/js');

function TestComponent() {
    return <h1>React está funcionando correctamente en Laravel</h1>;
  }

  if (document.getElementById('react-root')) {
    ReactDOM.render(<TestComponent />, document.getElementById('react-root'));
  }
