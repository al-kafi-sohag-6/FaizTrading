<div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title">@lang('lang_v1.transaction_history')</h2>
            <div class="row">
                <div class="col-sm-5">
                    <h3>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input alltransactions"><span class="transactioncustomername"></span>
                        </div>
                    </h3>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3">
                        <select class="form-control" id="transactionstype">
                            <option value="all">All</option>
                            <option value="estimate">Estimate</option>
                            <option value="sell">Sales Order</option>
                            <option value="purchase">Purchase Order</option>
                            <option value="delivery">Delivery Challan</option>
                            <option value="bill">Bill</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

        </div>
        <div class="modal-body">
            <table class="table table-striped table-bordered h4">
                <thead class="old_transactions">
                    {{-- previous_transactions --}}
                </thead>
            </table>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
