# MantisBT Docker Image

## Usage
TBA

### Supported Options
TBA

### Adding Custom Plugins
Adding Custom Plugins is as simple as mounting a folder with the required plugins to the docker image at `/mantisbt-2.26.2/plugins`. But care must be taken to ensure that you are not missing out on the default plugins. So it is suggested that you make a copy of the [plugins](mantisbt-2.26.2/plugins) folder, add your custom plugins there, and mount that folder at `/mantisbt-2.26.2/plugins`.