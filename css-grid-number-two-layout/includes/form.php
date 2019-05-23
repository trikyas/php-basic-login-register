<style>
  .myForm {
    display: grid;
    grid-template-areas:
      "contact comments"
      "... button";
  	grid-template-rows: 14em 2em;
  	grid-template-columns: 1fr 2fr;
    grid-gap: 1em;
    background: #06AED5;/*The cream bg-color(), forced me to make this blue...*/
    padding: 1.2em;
  }
  .myForm label  {
    grid-area: labels;
  }
  .myForm input {
    grid-area: contact;
   	width: 100%;
    padding: 1.1em;
    border: none;
    margin-bottom: 1em;
  }
  .myForm textarea {
   min-height: calc(100% - 2em);
   width: 95%;
   border: none;
   padding:.8em 1.1em;
   margin-left: 1em;
/*
   border-top-left-radius: 1em 5em;
   border-bottom-left-radius: 3em;
   border-bottom-right-radius: 1em 5em;
   border-top-right-radius: 1.3em;
*/
  }
  #contact-details {
   grid-area: contact;
  }
  #comment-box {
   grid-area: comments;
  }
  #comment-box label {
    margin-left: 3vh;
  }
  .myForm button {
    grid-area: button;
    border: 0;
    margin-top: .6em;
    text-transform: uppercase;
    color: rgb(0,0,0);
    background-color: rgb(255,255,255);
    filter: drop-shadow(-5px 5px 0 rgba(0,0,0,0.40));
    box-shadow: 5px 5px 0 rgba(0,0,0,0.40);
    grid-row: 2;
    grid-column: 1/4;
    transition: background-color .75s ease-in-out;
  }
  .myForm button:hover {
    grid-area: button;
    border: 0;
    color: rgb(255,239,198);
    background-color: rgb(75,44,117);
    grid-row: 2;
    grid-column: 1/4;
  }
  </style>
