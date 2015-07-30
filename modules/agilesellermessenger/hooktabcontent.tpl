<script type="text/javascript">
    var base_dir = "{$base_dir_ssl}";
    var id_product = {$id_product};
    var request_sellerquestion_uri = "{$request_sellerquestion_uri}";
    var request_sellerquestion_p = {$request_sellerquestion_p};
    var request_sellerquestion_n = {$request_sellerquestion_n};
    var ispostbacksellerquestion = {if $ispostbacksellerquestion}true{else}false{/if};
</script>

<script type="text/javascript" src="{$module_dir}js/common.js"></script>
<script type="text/javascript" src="{$module_dir}js/sellerquestionform.js"></script>
<script type="text/javascript">
    var agilesellerquestionsform_open = {if isset($post_errors) && count($post_errors)>0}1{else}0{/if};
	/** _agile_ tootgle  seller questions form _agile_ **/
	function toogleSellerQuestionForm()
	{ldelim}
	    if(agilesellerquestionsform_open == 1)
    	{ldelim}
    		$('#sendSellerQuestion').slideUp('fast');
	    	$('input#addSellerQuestionButton').fadeIn('slow');
	    	agilesellerquestionsform_open = 0;
    	{rdelim}
	    else
    	{ldelim}
    		$('#sendSellerQuestion').slideDown('fast');
	    	$('input#addSellerQuestionButton').fadeOut('slow');
	    	agilesellerquestionsform_open = 1;
    	{rdelim}
	{rdelim}
	
	
    function validateSellerQuestionForm() {ldelim}
        if (trim($('input#sellercustomer').val()).length < 1) {ldelim}
            alert("{l s='please input your name' mod='agilesellermessenger'}");
            return false;
        {rdelim}
        if (trim($('textarea#yourquestion').val()).length < 1) {ldelim}
            alert("{l s='Please enter your question or comment' mod='agilesellermessenger'}");
            return false;
        {rdelim}

        return ret;
    {rdelim}
	
</script>

{if $isVertical==1}
<h3 class="idTabHrefShort page-product-heading">{l s='Seller Q&A' mod='agilesellermessenger'}</h3>
{/if}
<div id="idTab12" class="rte">
            {if isset($post_errors) && $post_errors}

	          <div class="alert alert-info">
		          <p>{if $post_errors|@count > 1}{l s='There are' mod='agilesellermessenger'}{else}{l s='There is' mod='agilesellermessenger'}{/if} {$post_errors|@count} {if $post_errors|@count > 1}{l s='errors' mod='agilesellermessenger'}{else}{l s='error' mod='agilesellermessenger'}{/if} :</p>
		          <ol>
		          {foreach from=$post_errors key=k item=error}
			          <li>{$error}</li>
		          {/foreach}
		          </ol>
	          </div>

          {/if}
            {if $postSellerQuestionSuccess}
    			<div style="color:green;border:solid 1px green;padding:10px 10px 10px 10px;background-color:#e0e0e0;">
    			    <b><font color="green">{$postSellerQuestionSuccess}</font></b>
                </div>
            {/if}
             
            
    {if $logged == true OR !$login_required_sellerquestion}
    <button id="addSellerQuestionButton" style="cursor:pointer;margin-bottom:1em; background-color: #f0f0f0; -webkit-appearance: none;" onclick="javascript:toogleSellerQuestionForm()" >
      <h4>{l s='Click here to open or close the "Ask Seller A Question" form' mod='agilesellermessenger'}</h4>
     </button>
    <form style="display:{if isset($post_errors) && count($post_errors)>0}{else}none{/if};" action="{$request_sellerquestion_uri}&p={$request_sellerquestion_p}&n={$request_sellerquestion_n}&ispostbacksellerquestion=1" method="post" onsubmit="return validateSellerQuestionForm()" class="std" enctype="multipart/form-data" id="sendSellerQuestion">
		<input type="hidden" name="id_seller" value="{$sellerinfo->id_seller}">
	    <fieldset>{$customer_name}
		    <div id="divSellerCustomer" style="display:{if $logged}none{/if};margin:1em 1em 1em 1em;">
    		    <p class="bold">{l s='Your Name (nicknames allowed):' mod='agilesellermessenger'}</p>
	    	    <p><input type="text" name="customer_name" id="customer_name" value="{$customer_name}" /></p>
		    </div>
		    <div id="div1" style="display:{if $logged}none{/if};margin:1em 1em 1em 1em;">
    		    <p class="bold">{l s='Your email address:' mod='agilesellermessenger'}</p>
	    	    <p><input type="text" name="customer_email" size="80" id="customer_email" value="{$customer_email}" /></p>
		    </div>
    		{if $use_capcha_sellerquestion}
            <p class="bold" style="margin:1em 1em 1em 1em;";>
		    {l s='Verification Text:' mod='agilesellermessenger'}<br />
		    <span>
    		<input type="text" name="anti_spam_code_sellermessage" value="" />
            </span>
            <span>
    		<img src="{$base_dir_ssl}modules/agilesellermessenger/antispamimage.php" />
            </span>
		    </p>
        {/if}
		{if $allow_attachment==1}
        <p class="bold" style="margin:1em 1em 1em 1em;">{l s='Attach file' mod='agilesellermessenger'}</p>
        <p style="margin:1em 1em 1em 1em;">
          <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
          <input type="file" size="50" name="fileUpload1" id="fileUpload1" />
        </p>
        <p style="margin:1em 1em 1em 1em;"> 
          <input type="file" size="50" name="fileUpload2" id="fileUpload2" />
        </p>
        <p style="margin:1em 1em 1em 1em;">
          <input type="file" size="50" name="fileUpload3" id="fileUpload3" />
        </p>
        {/if}
        <p class="bold" style="margin:1em 1em 1em 1em;">{l s='Your Question:' mod='agilesellermessenger'}</p>
		    <p style="margin:1em 1em 1em 1em;"><textarea style="width:100%" rows="5" name="customer_message" id="customer_message">{if isset($post_errors) && $post_errors}{$post_message|escape:'html':'UTF-8'}{/if}</textarea></p>
		    <p class="submit" style="margin:1em 1em 1em 1em;">
          <button type="submit" name="submitSellerQuestion" id="submitSellerQuestion" value="{l s='Send' mod='agilesellermessenger'}" class="button agile-btn agile-btn-default">
            <span>{l s='Send' mod='agilesellermessenger'}&nbsp;<i class="icon-chevron-right right"></i>
            </span>
          </button>
 		    </p>
	    </fieldset>
    </form>
    {else}
	    <p class="align_center">{l s='Only registered users can post a new question.' mod='agilesellermessenger'}</p>
    {/if}	    
    {if $sellerquestions AND count($sellerquestions)>0}
    <p>{l s='Questions Asked' mod='agilesellermessenger'}(total:{$sellerquestions_nb})</p>
        {include file="$tpl_dir./pagination.tpl"}   
	    <div class="clear table_block">
	    {foreach from=$sellerquestions item=sellerquestion}
		    {if $sellerquestion.message}
              <div class="itemscope"  itemtype="http://data-vocabulary.org/Review" style="margin:10px;">
                <span>{$sellerquestion.from_name|truncate:20:'...':true|escape:'html':'UTF-8'}</span>
                <span>{dateFormat date=$sellerquestion.date_add|escape:'html':'UTF-8' full=0}</span><br />
                <br />
                <span>{$sellerquestion.message|truncate:380:'...':true|escape:'html':'UTF-8'|nl2br}</span>
                {if $sellerquestion.attshname1}
                 <a href="{$base_dir_ssl}modules/agilesellermessenger/get-att.php?&filename={$sellerquestion.attpsname1}&id_seller={$sellerquestion.id_seller}">{$sellerquestion.attshname1|truncate:20:'...':true|escape:'html':'UTF-8'}</a>&nbsp&nbsp
                {/if}
                {if $sellerquestion.attshname2}
                  <a href="{$base_dir_ssl}modules/agilesellermessenger/get-att.php?&filename={$sellerquestion.attpsname2}&id_seller={$sellerquestion.id_seller}">{$sellerquestion.attshname2|truncate:20:'...':true|escape:'html':'UTF-8'}</a>&nbsp&nbsp
                {/if}
                {if $sellerquestion.attshname3}
                  <a href="{$base_dir_ssl}modules/agilesellermessenger/get-att.php?&filename={$sellerquestion.attpsname3}&id_seller={$sellerquestion.id_seller}">{$sellerquestion.attshname3|truncate:20:'...':true|escape:'html':'UTF-8'}</a>
                {/if}
              </div>
             <hr style="border:dotted 1px gray" />
		    {/if}
	    {/foreach}
	    </div>
    {else}
	    <p class="align_center">{l s='There are currently no questions for this product.' mod='agilesellermessenger'}<br />{l s='Be the first to ask a question.' mod='agilesellermessenger'}</p>
    {/if}

</div>
