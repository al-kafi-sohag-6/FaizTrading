<div class="modal fade no-print" id="recent_transactions_modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title h2">@lang('lang_v1.recent_transactions')</h4>
				<input type="text" class="form-control h3" name="" id="searchrecentinvoice" aria-describedby="helpId" placeholder="">
				  
			</div>
			<div class="modal-body">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_final" data-toggle="tab" aria-expanded="true"><b><i class="fa fa-check"></i> @lang('sale.final')</b></a></li>
						<li class=""><a href="#tab_quotation" data-toggle="tab" aria-expanded="false"><b><i class="fa fa-terminal"></i> @lang('lang_v1.quotation')</b></a></li>
						<li class=""><a href="#tab_draft" data-toggle="tab" aria-expanded="false"><b><i class="fa fa-terminal"></i> @lang('sale.draft')</b></a></li>
						<li class=""><a href="#tab_credit_sales" data-toggle="tab" aria-expanded="false"><b><i class="fa fa-terminal"></i> @lang('sale.credit_sale')</b></a></li>
						<li class=""><a href="#tab_suspended_sales" data-toggle="tab" aria-expanded="false"><b><i class="fa fa-terminal"></i> @lang('sale.suspended_sale')</b></a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_final">
						</div>
						<div class="tab-pane" id="tab_quotation">
						</div>
						<div class="tab-pane" id="tab_draft">
						</div>
						<div class="tab-pane" id="tab_credit_sales">
						</div>
						<div class="tab-pane" id="tab_suspended_sales">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
			    <button type="button" class="btn btn-default" data-dismiss="modal"><h4>@lang('messages.close')</h4></button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>