<style>
    .container{
        display: grid;
        grid-template-columns: 1fr 3fr 3fr;
        row-gap: 2rem;
        column-gap: 2rem;
        grid-template-columns: repeat(auto-fit,minmax(400px,1fr));
    }
    .item{
        border: 2px solid black;
        /* background-color: rgb(235, 138, 235); */
        padding: 23px;
    }
    /* .item:first-child{
      /* grid-row: 1 / span 3;
      grid-column: 1 / span 3;  /* grid-column-start: 1; */
        /* grid-column-end: 3;
        grid-row-start: 1;
        grid-row-end: 3;  
    }*/     
</style>
<body>
    <div class="container">
        <div class="item"><?php include "Partials/card.php" ?></div>
        
       
    </div>
</body>
</html>