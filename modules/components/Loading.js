import React from 'react';

export default (props) => {
  if (props.error) {
    return <div>Error! <button onClick={ props.retry }>Retry</button>
      <div>{props.error.toString()}</div>
    </div>;
  } else {
    return <div>Loading...</div>;
  }
}
