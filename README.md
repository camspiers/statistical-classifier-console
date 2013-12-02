# PHP Classifier Console

This the command-line tool for the [PHP Classifier Library](https://github.com/camspiers/statistical-classifier)

## Installation

Download the [`classifier.phar`](http://php-classifier.com/classifier.phar) executable.

To stay up to date run

    $ php classifier.phar self-update

## Usage

### Commands

#### Overview

```
Available commands:
  classify             Classify a document
  generate-container   Generate container
  help                 Displays help for a command
  list                 Lists commands
  self-update          Update the classifier
config
  config:create        Creates the config
  config:open          Opens the config
  config:remove        Removes the config
model
  model:prepare        Prepare an model
  model:remove         Remove a model
server
  server:run           Run a classifier server
test
  test:directory       Test the classifier against a directory
  test:pdo             Test the classifier with a PDO query
train
  train:directory      Train the classifier with a directory
  train:document       Train the classifier with a document
  train:pdo            Train the classifier with a PDO query
```

*train:document*

```
Usage:
 train:document [-c|--classifier[="..."]] [-p|--prepare] model category document

Arguments:
 model                 Name of model
 category              Which category this data is
 document              The document to train on

Options:
 --classifier (-c)     Name of classifier (default: "classifier.complement_naive_bayes")
 --prepare (-p)        Prepare the model after training
```

#### Example

```bash
$ classifier train:document MyModel spam "This is spam"
```

*train:directory*

```
Usage:
 train:directory [-i|--include[="..."]] [-c|--classifier[="..."]] [-p|--prepare] model directory

Arguments:
 model                 Name of model
 directory             The directory to train on

Options:
 --include (-i)        The categories from the directory to include (multiple values allowed)
 --classifier (-c)     Name of classifier (default: "classifier.complement_naive_bayes")
 --prepare (-p)        Prepare the model after training

```

#### Examples

```bash
$ classifier train:directory MyModel ./mydocs/
$ classifier train:directory -i MyCategory MyModel ./mydocs/
```

*train:pdo*

```
Usage:
 train:pdo [-c|--classifier[="..."]] [-p|--prepare] model category column query dsn [username] [password]

Arguments:
 model                 Name of model
 category              Which category this data is
 column                Which column to select
 query                 The query to run
 dsn                   The dsn to use
 username              The username to use
 password              The password to use

Options:
 --classifier (-c)     Name of classifier (default: "classifier.complement_naive_bayes")
 --prepare (-p)        Prepare the model after training
```

#### Example

```bash
$ classifier train:pdo MyModel spam Comment "SELECT Comment FROM Comment WHERE Spam = 1" "mysql:dbname=mydb;host=127.0.0.1" root root
```

*model:remove*

```
Usage:
 model:remove model

Arguments:
 model                 Name of model
```

#### Example

```bash
$ classifier model:remove MyModel
```

*model:prepare*

```
Usage:
 model:prepare model

Arguments:
 model                 Name of model
```

#### Example

```bash
$ classifier model:prepare MyModel
```

*classify*

```
Usage:
 classify [-c|--classifier[="..."]] model document

Arguments:
 model                 Name of model
 document              The document to classify

Options:
 --classifier (-c)     Name of classifier (default: "classifier.complement_naive_bayes")
```

#### Example

```bash
$ classifier classify MyModel "Some document to classify"
```

*server:run*

```
Usage:
 server:run [--host[="..."]] [-p|--port[="..."]]

Options:
 --host                Set a host (default: "127.0.0.1")
 --port (-p)           Set a port (default: 1337)
```

#### Examples

```bash
$ classifier server:run
$ classifier server:run -p 9999
$ classifier server:run &
```

*generate-container*

```
Usage:
 generate-container
```

#### Examples

```bash
$ classifier generate-container
```

*config:create*

```
Usage:
 config:create [-g|--global]

Options:
 --global (-g)         Uses global config applied across all users
```

#### Examples

```bash
$ classifier config:create
$ classifier config:create -g
```

*config:remove*

```
Usage:
 config:remove [-g|--global]

Options:
 --global (-g)         Uses global config applied across all users
```

#### Examples

```bash
$ classifier config:remove
$ classifier config:remove -g
```

*config:open*

```
Usage:
 config:open [-g|--global]

Options:
 --global (-g)         Uses global config applied across all users
```

#### Examples

```bash
$ classifier config:open
$ classifier config:open -g
```

## Unit testing
    $ composer install --dev
    $ vendor/bin/phpunit