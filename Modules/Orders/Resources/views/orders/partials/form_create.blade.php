@include('dashboard::errors')


<select2
    name="user_id"
    label="@lang('accounts::customers.singular')"
    placeholder="@lang('accounts::customers.select')"
    remote-url="{{ route('customers.select') }}"
    value="{{ $order->user_id ?? old('user_id') }}"
></select2>


<select2
    name="shipping_company_id"
    label="@lang('accounts::shipping_companies.singular')"
    placeholder="@lang('accounts::shipping_companies.select')"
    remote-url="{{ route('shipping_companies.select') }}"
    value="{{ $order->shipping_company_id ?? old('shipping_company_id') }}"
></select2>

<select2
    name="coupon_id"
    label="@lang('coupons::coupons.singular')"
    placeholder="@lang('coupons::coupons.select')"
    remote-url="{{ route('coupons.select') }}"
    value="{{ $order->coupon_id ?? old('coupon_id') }}"
></select2>

{{ BsForm::textarea('shipping_company_notes') }}
{{ BsForm::text('subtotal') }}
{{ BsForm::text('discount') }}
{{ BsForm::text('total') }}


