<?php include 'menu.php'; ?>

    <!-- <div class="flex-container"> -->
      <div class="flex-container_2">
        <div class="flex-item_2">
          div a
          <div class="sub-a">div sub-a</div>
          <p>i'm an element of sub-a</p>
        </div>

        <div class="flex-item_2">
          div b
          <div class="sub-b">div sub-b</div>
          <p>i'm an element of sub-b</p>
        </div>
        <div class="flex-item_2">
          div c
          <div class="sub-c">div sub-c</div>
        </div>
        <div class="flex-item_2">div d</div>

        <div class="flex-container_2">
          <div class="flex-item_2 code_html">
            <pre>
                    <code>
                    &lt;div class="flex-container"&gt;
                    
                        &lt;div class="flex-item_2"&gt;div a
                            &lt;div class="sub-a"&gt;div sub-a&lt;/div&gt;
                            &lt;p&gt; i'm an element of sub-a&lt;/p&gt;
                        &lt;/div&gt;
                
                        &lt;div class="flex-item_2"&gt;div b
                            &lt;div class="sub-b"&gt;div sub-b&lt;/div&gt;
                            &lt;p&gt; i'm an element of sub-b&lt;/p&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-item_2"&gt;div c
                            &lt;div class="sub-c"&gt;div sub-c&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-item_2"&gt;div d
                        &lt;/div&gt;
                    
                    &lt;div class="flex-container"&gt;
                        &lt;div&gt;
                            &lt;p&gt;flex-container&lt;/p&gt;
                            &lt;code class="flex-item_3"&gt;
                            
                            &lt;...&gt;                           
                            &lt;/code&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    </code>
                </pre>
          </div>

          <div class="flex-item_2 code_css">
            <pre>.flex-container { <br>
                    display: flex; <br>
                    background-color: aqua; <br>
                } 
                </pre>
          </div>
        </div>
      </div>

      <p>flex-container</p>


      <hr />
      <br />


      <div class="flex-container_2">
        <div class="flex-container_3">
          <div class="flex-item_3">
            <img src="img/cities_1.webp" alt="" />
          </div>
          <div class="flex-item_3">
            <img src="img/cities_2.webp" alt="" />
          </div>
          <div class="flex-item_3">
            <img src="img/cities_3.webp" alt="" />
          </div>
        </div>

        <div class="flex-containter_2">
          <div class="flex-item_2 code_html">
            <pre>
                    <code>
                      &lt;div class="flex-container_2"&gt;
                      &lt;div class="flex-container_3"&gt;
                        &lt;div class="flex-item_3"&gt;
                          &lt;img src="img/cities_1.webp" alt="" /&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-item_3"&gt;
                          &lt;img src="img/cities_2.webp" alt="" /&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-item_3"&gt;
                          &lt;img src="img/cities_3.webp" alt="" /&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                  
                      &lt;div class="flex-containter_2"&gt;
                        &lt;div class="flex-item_2 code_html"&gt;
                          &lt;pre&gt;
                                  &lt;code&gt;
                  
                    </code>
                </pre>
          </div>

          <div class="flex-item_2 code_css">
            <pre>
.flex-container_3 {
          display: flex;
          flex-direction: column;
          
          background-color: lightgreen;
          justify-content: center;
        }
        </pre
            >

            <pre>
          .flex-item_3 {
            background-color: darkblue;
            margin: 10px;
            padding: 10px;
          }
        </pre
            >
          </div>
        </div>
      </div>
    </div>
    <p>flex-direction: column;</p>

    <br />
    <hr />
  </body>
</html>


