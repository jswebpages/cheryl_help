<div class="footer_col">
        <p>Social Media.....</p>
        <p>copyright © JSwebpages.com <?php echo date("Y"); ?></p>
      </div>
    </div>
    </div>
</body>
</html>

<script>
  send_data([], 'read');
    
    function send_data(obj, type)
    {

        var form = new FormData();

        for(key in obj)
            {
                form.append(key, obj[key]);
            }
                                    
        form.append('data_type', type);

        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange', function(){
            if(ajax.readyState == 4)
                {
                    if(ajax.status == 200)
                        {
                            handle_result(ajax.responseText);
                            } else {
                            alert("error");
                        }
                }
       });

        ajax.open('post', 'api.php', true);
        ajax.send(form);
    }

    function handle_result(result)
        {
            let str = result;
            console.log("result: " + result);
            console.log("result type: " + typeof result);
                        console.log("sl: " + str[7]);
            document.querySelector(".table-body").innerHTML = result;
            
        }        
   
</script>

