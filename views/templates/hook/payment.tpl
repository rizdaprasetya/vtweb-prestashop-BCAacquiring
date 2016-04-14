<div class="row">
  <div class="col-xs-12 col-md-6">
    <p class="payment_module">
      {if version_compare(Configuration::get('PS_INSTALL_VERSION'), '1.5') == -1}
        <a class="bankwire" href="{$base_dir|cat:'modules/veritransbca/payment.php'}" title="Pay Via Veritrans">
      {else}
        <a class="bankwire" href="{$link->getModuleLink('veritransbca', 'payment')}" title="Pay Via Veritrans">
      {/if}
        <img src="{$this_path}Veritrans.png" alt="{l s='Pay via Veritrans' mod='veritransbca'}" height="30px"/>
        {$displayname}
      </a>
    </p>  
  </div>
</div>