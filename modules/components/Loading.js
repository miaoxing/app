import React from 'react';

export default (props) => {
  console.log(props.error);
  if (props.error) {
    return <div>Error! <button onClick={ props.retry }>Retry</button>
      <div>{props.error.toString()}</div>
    </div>;
  } else {
    return <div>Loading...</div>;
  }
}
