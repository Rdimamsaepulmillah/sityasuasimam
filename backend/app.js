const express = require("express");
const { MongoClient, ObjectID } = require("mongodb");

const app = express();
const PORT = 3000;

// Connection URI
const uri =
  "mongodb://localhost:27017/?directConnection=true&serverSelectionTimeoutMS=2000&appName=mongosh+2.1.1";

const client = new MongoClient(uri, { useUnifiedTopology: true });

client.connect((err) => {
  if (err) {
    console.error("Error connecting to MongoDB:", err);
    return;
  }
  console.log("Connected to MongoDB");
});
// Middleware to parse JSON in requests
app.use(express.json());

// Define routes for CRUD operations

// Create
app.post("/api/your-collection", async (req, res) => {
  const newDocument = req.body;

  const result = await client
    .db("your-database-name")
    .collection("your-collection")
    .insertOne(newDocument);
  res.json(result.ops[0]);
});

// Read all documents
app.get("/api/your-collection", async (req, res) => {
  const documents = await client
    .db("your-database-name")
    .collection("your-collection")
    .find()
    .toArray();
  res.json(documents);
});

// Read a specific document by ID
app.get("/api/your-collection/:id", async (req, res) => {
  const id = req.params.id;

  const document = await client
    .db("your-database-name")
    .collection("your-collection")
    .findOne({ _id: new ObjectID(id) });

  if (!document) {
    return res.status(404).json({ error: "Document not found" });
  }

  res.json(document);
});

// Update a document by ID
app.put("/api/your-collection/:id", async (req, res) => {
  const id = req.params.id;
  const updatedDocument = req.body;

  const result = await client
    .db("your-database-name")
    .collection("your-collection")
    .updateOne({ _id: new ObjectID(id) }, { $set: updatedDocument });

  if (result.matchedCount === 0) {
    return res.status(404).json({ error: "Document not found" });
  }

  res.json({ message: "Document updated successfully" });
});

// Delete a document by ID
app.delete("/api/your-collection/:id", async (req, res) => {
  const id = req.params.id;

  const result = await client
    .db("your-database-name")
    .collection("your-collection")
    .deleteOne({ _id: new ObjectID(id) });

  if (result.deletedCount === 0) {
    return res.status(404).json({ error: "Document not found" });
  }

  res.json({ message: "Document deleted successfully" });
});

// Start the Express server
app.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});
