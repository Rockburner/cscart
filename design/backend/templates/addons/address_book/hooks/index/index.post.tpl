<div class="statistics-box">
  <div class="statistics-body">
  <h4>Addresses</h4>
  <div class="clear">
    {if $addresses}
      <ul>
        {foreach from=$addresses item="address"}
          <li>
          <strong>{$address.name}</strong>
          <address>
            {$address.line_1}<br/>
            {$address.line_2}<br/>
            {$address.city}<br/>
            {$address.county}<br/>
            {$address.postcode}<br/>
            {$address.country}<br/>
          </address>
          <p>{$address.status}</p>
          </li>
        {/foreach>
      </ul>
    {else}
      <p>No addresses in system yet</p>
    {/if}
  </div>
  <div class="clear">
    New address form here
  </div>
  </div>
</div>
