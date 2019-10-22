<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Vew.sj</title>
    <body>
        <div id='app'>
        <div>
        <button class="btn btn-primary" v-on:click='editing=true'>Edit</button>
        <button class="btn btn-info" v-on:click='editing=false'>Cancel</button>

    <div>
        <h5>Items</h5>
        <ul>
            <li v-for='item in items'>
            @{{ item }}
            <button class="btn btn-primary"
            v-if='editing'
            v-on:click='addToCart(item)'>Add</button></li>
        </ul>
    </div>

    <div>
        <h5>Cart</h5>
        <ul>
            <li v-for='cart_item in cart'>
            @{{ cart_item }}
            <button class="btn btn-danger"
            v-if='editing'
            v-on:click='removeFromCart(cart_item)'>Remove</button></li>
        </ul>
    </div>
</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script>
    var vm = new Vue ({
        el:'#app',
        data:{
            items:['Vodka', 'Emperador', 'Ginebra SM', 'Whsikey', 'Ginger Ale'],
            cart:[],
            editing:false
        },
        methods:{
            addToCart(item){
                this.cart.push(item);
                var index = this.item.indexOf(item);
                this.items.splice(index, 1);
            },
            removeFromCart(item){
                var index = this.cart.indexOf(item);
                this.cart.splice(index, 1);
        }
      }  
        
    })
</script>
    </body>
</html>

