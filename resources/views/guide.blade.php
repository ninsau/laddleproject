@extends('layouts.app')

@section('title')
Documentation | Laddle
@endsection

@section('content')
<div class="hero is-medium is-primary">
<div class="hero-body container">
<h1 class="title is-1 has-text-white">Laddle Documentation</h1>
</div>
</div>

<section class="hero is-medium">
  <div class="hero-body has-text-centered">
    <div class="container">
    <h2 class="title is-1 has-text-primary">Sell Upload </h2>
    <div class="columns is-multiline is-centered">
      <div class="table-container">

      <table class="table is-striped">
        <thead>
          <tr>
            <th><abbr title="Number">Num.</abbr></th>
            <th>Name</th>
            <th><abbr title="Value">Val</abbr></th>
            <th><abbr title="Requirements">Reqs.</abbr></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>Title</td>
            <td>String</td>
            <td>required | max:255</td>
        </tr>
          <tr>
            <th>2</th>
            <td>Description</td>
            <td>String</td>
            <td>required | max:255</td>
            </tr>
          <tr>
            <th>3</th>
            <td>Tags</td>
            <td>String | Multi-input</td>
            <td>required | least:1</td>
          </tr>
          <tr>
            <th>4</th>
            <td>Languages</td>
            <td>String | Multi-input</td>
            <td>required | min:1</td>
          </tr>
          <tr>
            <th>5</th>
            <td>Url</td>
            <td>String</td>
            <td>required | max:255</td>
          </tr>
          <tr>
            <th>6</th>
            <td>Price</td>
            <td>Integer | US Dollar Value</td>
            <td>required | min:1</td>
          </tr>
          <tr>
            <th>7</th>
            <td>Image</td>
            <td>Image File</td>
            <td>required | mimes:jpeg,png,jpg,gif,svg | max:1 | max-size:2mb</td>
          </tr>
          <tr>
            <th>8</th>
            <td>Guide</td>
            <td>File Document</td>
            <td>required | mimes:docx,pdf,txt | max:1 | max-size:2mb</td>
          </tr>
          <tr>
            <th>9</th>
            <td>Source</td>
            <td>Application Document</td>
            <td>required | mimes:zip | max:1 | max-size:222mb</td>
          </tr>

        </tbody>
      </table>
</div>
    </div><hr>
  </div>
</div>
</section>


<section class="hero is-medium">
  <div class="container hero-body has-text-centered">
    <h2 class="title is-1 has-text-primary">Features</h2>
    <div class="columns is-multiline is-centered">
      <div class="table-container">

      <table class="table is-striped">
        <thead>
          <tr>
            <th><abbr title="Number">Num.</abbr></th>
            <th>Title</th>
            <th><abbr title="Definition">Dif.</abbr></th>
            <th><abbr title="Value">Val.</abbr></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>Projects</td>
            <td>Projects uploaded by [current seller], whether listed or unlisted.</td>
            <td>Integer | All [Published and Drafted]</td>
        </tr>
          <tr>
            <th>2</th>
            <td>Clicks</td>
            <td>A click is recorded when a potential buyer clicks a listing from [current seller] to view its details</td>
            <td>Integer | Sum</td>
            </tr>
          <tr>
            <th>3</th>
            <td>Earned</td>
            <td>Amount of money earned, in US Dollars by [current seller] after laddle service charge has been deducted</td>
            <td>Integer | Sum [Credited and Uncredited]</td>
          </tr>
          <tr>
            <th>4</th>
            <td>Sold</td>
            <td>Number of times a listing by [current seller] has been bought by buyer[s]</td>
            <td>Integer</td>
          </tr>
          <tr>
            <th>5</th>
            <td>Views</td>
            <td>A view is recorded when a value from any or more listings from [current seller] is displayed by search</td>
            <td>Integer | Sum</td>
          </tr>
          <tr>
            <th>6</th>
            <td>Delete</td>
            <td>[Current seller] removes a listing from search. Listing is no longer stored on Laddle servers.</td>
            <td>Null</td>
          </tr>
          <tr>
            <th>7</th>
            <td>Reserve</td>
            <td>[Current seller] removes listing from search. Listing is still stored on Laddle servers.</td>
            <td>Draft</td>
          </tr>
          <tr>
            <th>8</th>
            <td>Undo-reserve</td>
            <td>Rollback on Reserve. Listing is added to search and it is visible to buyers once more.</td>
            <td>Publish</td>
          </tr>
          <tr>
            <th>9</th>
            <td>Status</td>
            <td>This tells [current seller] the state of their uploaded projects.</td>
            <td>Drafted - if not Reserved, then some files are missing. Delete at once. | Published - All correct </td>
          </tr>

        </tbody>
      </table>
</div>
</div></div>
</section>

@endsection
