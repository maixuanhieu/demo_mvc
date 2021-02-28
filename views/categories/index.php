<table class="table">
        <thead class="thead">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Category</th>
            <th scope="col" class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <th class="align-middle" scope="row">1</th>
            <td class="align-middle">Autumn Valentine</td>
            <td class="text-center">
              <form
                class="d-inline"
                onsubmit="return confirm('Do you want to remove `Autumn Valentine`')"
                action="?controller=categories&amp;action=delete&amp;id=8"
                method="POST"
              >
                <button type="submit" class="btn btn-link">Remove</button>
              </form>
            </td>
          </tr>
          <tr class="">
            <th class="align-middle" scope="row">2</th>
            <td class="align-middle">Handwatch</td>
            <td class="text-center">
              <form
                class="d-inline"
                onsubmit="return confirm('Do you want to remove `Handwatch`')"
                action="?controller=categories&amp;action=delete&amp;id=7"
                method="POST"
              >
                <button type="submit" class="btn btn-link">Remove</button>
              </form>
            </td>
          </tr>
          <tr class="">
            <th class="align-middle" scope="row">3</th>
            <td class="align-middle">Notebook</td>
            <td class="text-center">
              <form
                class="d-inline"
                onsubmit="return confirm('Do you want to remove `Notebook`')"
                action="?controller=categories&amp;action=delete&amp;id=3"
                method="POST"
              >
                <button type="submit" class="btn btn-link">Remove</button>
              </form>
            </td>
          </tr>
          <tr class="">
            <th class="align-middle" scope="row">4</th>
            <td class="align-middle">Phone</td>
            <td class="text-center">
              <form
                class="d-inline"
                onsubmit="return confirm('Do you want to remove `Phone`')"
                action="?controller=categories&amp;action=delete&amp;id=1"
                method="POST"
              >
                <button type="submit" class="btn btn-link">Remove</button>
              </form>
            </td>
          </tr>
          <tr class="">
            <th class="align-middle" scope="row">5</th>
            <td class="align-middle">Tablet</td>
            <td class="text-center">
              <form
                class="d-inline"
                onsubmit="return confirm('Do you want to remove `Tablet`')"
                action="?controller=categories&amp;action=delete&amp;id=2"
                method="POST"
              >
                <button type="submit" class="btn btn-link">Remove</button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>

      <!-- FAB CREATE CATEGORY LINK -->
      <a
        class="fab-button-mid-bot btn btn-primary btn-lg"
        type="button"
        href="?controller=categories&action=add"
        >+ Add new Category</a
      >