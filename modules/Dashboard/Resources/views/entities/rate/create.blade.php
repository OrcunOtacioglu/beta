<!-- RATES -->
<div class="panel panel-default panel-line">

    <div class="panel-heading">
        <h3 class="panel-title">What tickets will you offer?</h3>
    </div>

    <div class="panel-body">

        <!-- RATES GENERAL TABLE -->
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Ticket Name</th>
                <th>Max Quantity</th>
                <th>Type</th>
                <th>Price</th>
                <th class="text-nowrap">Actions</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="General Admission">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Max QTY">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select name="type" id="type" class="form-control">
                            <option value="0">Paid</option>
                            <option value="1">Free</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="12$">
                    </div>
                </td>
                <td class=text-nowrap>
                    <div class="btn-group" aria-label="Basic example" role="group">
                        <button type="button" class="btn btn-icon btn-pure btn-primary" data-toggle="collapse" data-target="#rate">
                            <i class="icon wb-settings" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-pure btn-default">
                            <i class="icon wb-copy" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-pure btn-default">
                            <i class="icon wb-trash" aria-hidden="true"></i>
                        </button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
        <!-- END RATES GENERAL TABLE -->

        <!-- RATES ADVANCED -->
        <div class="collapse" id="rate" style="background: #f3f7f9;">

            <!-- DESCRIPTION -->
            <div class="row" style="padding: 10px;">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END DESCRIPTION -->

            <!-- RATE DATES -->
            <div class="row" style="padding: 10px;">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="salesStart">Sales Start Date</label>
                        <div class="input-group">
                            <input type="text" name="salesStart" id="salesStart" class="form-control">
                            <div class="input-group-addon">
                                <i class="icon wb-calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="salesEnd">Sales End Date</label>
                        <div class="input-group">
                            <input type="text" name="salesEnd" id="salesEnd" class="form-control">
                            <div class="input-group-addon">
                                <i class="icon wb-calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END RATE DATES -->

            <!-- RATE AVAILABILITY -->
            <div class="row" style="padding: 10px;">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="0">Active</option>
                            <option value="1">Hidden</option>
                            <option value="2">Locked</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="available">Available</label>
                        <select name="available" id="available" class="form-control">
                            <option value="0">Everywhere</option>
                            <option value="1">Online only</option>
                            <option value="2">At the door</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- END RATE AVAILABLITY -->

            <!-- RATE DELIVERY -->
            <div class="row" style="padding: 10px;">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="min_allowed">Min Allowed</label>
                                <input type="text" name="min_allowed" id="min_allowed" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="max_allowed">Max Allowed</label>
                                <input type="text" name="max_allowed" id="max_allowed" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="release">Release Tickets</label>
                        <select name="release" id="release" class="form-control">
                            <option value="0">Immediately</option>
                            <option value="1">1 Day Before Event</option>
                            <option value="2">2 Days Before Event</option>
                            <option value="3">3 Days Before Event</option>
                            <option value="7">1 Week Before Event</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- END RATE DELIVERY -->

        </div>
        <!-- END RATES ADVANCED -->
    </div>

    <div class="panel-footer">
        <div class="row">
            <div class="col-md-12">
                <div class="float-right">
                    <a href="#" class="btn btn-primary">
                        <i class="icon-color wb-plus" aria-hidden="true"></i> Add Rate
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END RATES -->